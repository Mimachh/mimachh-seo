import FormFieldLayout from "@/Components/mimachh/2fa/Form/form-field-layout";
import { Input } from "@/Components/ui/input";
import { Textarea } from "@/Components/ui/textarea";

interface Props {
    data: {
        title_seo: string;
        description_seo: string;
    };
    setData: (key: string, value: string) => void;
    errors: Partial<Record<"description_seo" | "title_seo", string>>;
}
const SeoForm = (props: Props) => {
    const { data, setData, errors } = props;
    return (
        <div className="space-y-3">
            <FormFieldLayout
                fieldName="title_seo"
                label="Titre SEO"
                error={errors.title_seo}
            >
                <Input
                    id="title_seo"
                    type="text"
                    name="title_seo"
                    placeholder="Votre titre SEO"
                    value={data.title_seo}
                    className="mt-1 block w-full py-3 border"
                    onChange={(e) => setData("title_seo", e.target.value)}
                />
                 <small>Entre 50 et 60 caractères maximum</small>
            </FormFieldLayout>

            <FormFieldLayout
                fieldName="description_seo"
                label="Description SEO"
                error={errors.description_seo}
            >
                <Textarea
                    placeholder="Votre description SEO"
                    className="resize-none"
                    id="description_seo"
                    name="description_seo"
                    value={data.description_seo}
                    onChange={(e) => setData("description_seo", e.target.value)}
                />
                <small>Entre 50 et 160 caractères maximum</small>
            </FormFieldLayout>
        </div>
    );
};

export default SeoForm;
